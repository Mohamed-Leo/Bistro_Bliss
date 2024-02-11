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

        // check if there are any bookings and delete them before deleting user
        bookings::where("user_id" , $user->id)->delete();
        $user->deleteProfilePhoto();
        $user->tokens->each->delete();
        $user->delete();
    }
}
