<?php

namespace App\Traits;

use App\Helpers\ActionButtonsBuilder;

trait ActionsButtonTrait
{
    /**
     * Generate action buttons for the DataTables row.
     *
     * @return string HTML string for the action buttons
     */
    private function getActionButtons(
        $id,
        $onclickEdit = null,
        $onclickDelete = null,
        $editType = 'button',
        $onclickDetail = null,
        $detailType = 'button'
    ) {
        //  Creates a new instance of ActionButtonsBuilder and sets the type and identity properties.
        $actionButtonsBuilder = (new ActionButtonsBuilder())
            ->setType($editType)
            ->setIdentity($id);

        // Sets the onclick edit action for the action buttons builder.
        if ($onclickEdit) {
            $actionButtonsBuilder->setOnclickEdit($onclickEdit);
        }

        // Sets the onclick detail for the action buttons builder if the $onclickDetail parameter is truthy.
        if ($onclickDetail) {
            $actionButtonsBuilder->setOnclickDetail($onclickDetail);
        }

        // Sets the onclick delete action for the action buttons builder.
        if ($onclickDelete) {
            $actionButtonsBuilder->setOnclickDelete($onclickDelete);
        }

        // Sets the onclick detail action for the action buttons builder.
        if ($detailType) {
            $actionButtonsBuilder->setTypeDetail($detailType);
        }

        // Build and return the action buttons.
        return $actionButtonsBuilder->build();
    }
}
