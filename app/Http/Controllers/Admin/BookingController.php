<?php

namespace App\Http\Controllers\Admin;

use App\Models\BookModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tzsk\Sms\Facades\Sms;


class BookingController extends Controller
{
    public function view_booking()
    {

        $booking=BookModel::paginate(15);
        return view('admin.booking', compact('booking'));
    }

    public function approve_booking($id)
    {
        $booking=BookModel::findOrFail($id);
        $booking->status='Approved';
        $booking->update();

        return back()->with('success','Booking Approved successfully');
    }

    public function delete_booking($id)
    {
        $booking=BookModel::findOrFail($id);
        $booking->delete();
        return back()->with('success','Booking Deleted successfully');
    }
}