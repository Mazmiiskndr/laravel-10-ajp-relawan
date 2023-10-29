<?php

namespace App\Livewire\Backend\Volunteer;

use App\Services\Volunteer\VolunteerService;
use Livewire\Component;

class Datatables extends Component
{
    /**
     * Render the view for the volunteer datatables.
     * @return \Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire.backend.volunteer.datatables');
    }

    /**
     * Get data `volunteer` for the DataTable.
     * @param VolunteerService $volunteerService Client service instance
     * @return mixed
     */
    public function getDataTable(VolunteerService $volunteerService)
    {
        return $volunteerService->getDatatables();
    }
}
