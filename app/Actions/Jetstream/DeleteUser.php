<?php

namespace App\Actions\Jetstream;

use App\Models\bookings;
use App\Models\User;
use Laravel\Jetstream\Contracts\DeletesUsers;

class DeleteUser implements DeletesUsers
{
    /**
     * Delete the given user.
     */
    public function delete(User $user): void
    {
        // $user->deleteProfilePhoto();
        // $user->tokens->each->delete();
        // $user->delete();

        // check if there are any bookings
        $userBookings = bookings::get()->where("user_id" , auth()->user()->id);

        if($userBookings) {
            return $userBookings;
        }
        else {
            $user->deleteProfilePhoto();
            $user->tokens->each->delete();
            $user->delete();
        }
    }
}
