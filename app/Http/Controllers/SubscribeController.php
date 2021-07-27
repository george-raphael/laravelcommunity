<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscribeRequest;
use App\Models\Subscribe;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class SubscribeController extends Controller
{
    private Subscribe $subscribe;

    /**
     * Create a new CategoryController instance.
     */
    public function __construct()
    {
        $this->subscribe = new Subscribe();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SubscribeRequest $request
     * @return RedirectResponse|Response
     */
    public function store(SubscribeRequest $request)
    {
        $this->subscribe->register($request->email);

        return back()
            ->with('success', 'Thanks, we will keep you informed.');
    }
}
