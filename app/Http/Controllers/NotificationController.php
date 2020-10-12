<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function storeUserMessage(Request $request)
    {
        $user = auth()->user();
        Notification::create([
            'name' => $user->name,
            'email' => $user->email,
            'message' => $request->message,
        ]);
        return back();
    }
    public function index()
    {
        $notifications = Notification::all();
        return view('admin.notifications', ['notifications' => $notifications]);
    }
    public function destroy(Notification $notification)
    {
        $notification->delete();
        return back();
    }
}
