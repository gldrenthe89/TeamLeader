<?php

namespace MadeITBelgium\TeamLeader\Ticket;

/**
 * TeamLeader Laravel PHP SDK.
 *
 * @version    1.5.0
 *
 * @copyright  Copyright (c) 2018 Made I.T. (https://www.madeit.be)
 * @author     Tjebbe Lievens <tjebbe.lievens@madeit.be>
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-3.txt    LGPL
 */
class Tickets
{
    private $teamleader;

    public function __construct($teamleader)
    {
        $this->setTeamleader($teamleader);
    }

    /**
     * get Teamleader.
     *
     * @param $teamleader
     */
    public function getTeamleader()
    {
        return $this->teamleader;
    }

    /**
     * set Teamleader.
     *
     * @param $teamleader
     */
    public function setTeamleader($teamleader)
    {
        $this->teamleader = $teamleader;
    }

    /**
     * Get a list of tickets.
     */
    public function list($data = [])
    {
        return $this->teamleader->postCall('tickets.list', [
            'body' => json_encode($data),
        ]);
    }

    /**
     * Get details for a single ticket.
     */
    public function info($id)
    {
        $data['id'] = $id;

        return $this->teamleader->postCall('tickets.info', [
            'body' => json_encode($data),
        ]);
    }

    /**
     * Add a tickets.
     */
    public function add($data)
    {
        return $this->teamleader->postCall('tickets.create', [
            'body' => json_encode($data),
        ]);
    }

    /**
     * Update a ticket.
     */
    public function update($id, $data)
    {
        $data['id'] = $id;

        return $this->teamleader->postCall('tickets.update', [
            'body' => json_encode($data),
        ]);
    }

    /**
     * Lists messages of a ticket.
     */
    public function listMessages($id)
    {
        $data['id'] = $id;

        return $this->teamleader->postCall('tickets.listMessages', [
            'body' => json_encode($data),
        ]);
    }

    /**
     * Gets the ticket message.
     */
    public function getMessage($id)
    {
        $data['id'] = $id;

        return $this->teamleader->postCall('tickets.getMessage', [
            'body' => json_encode($data),
        ]);
    }

    /**
     * Imports an existing message to a ticket.
     */
    public function importMessage($id, $data)
    {
        $data['id'] = $id;

        return $this->teamleader->postCall('tickets.importMessage', [
            'body' => json_encode($data),
        ]);
    }

    /**
     * Adds a message to a ticket.
     */
    public function addReply($id, $data)
    {
        $data['id'] = $id;

        return $this->teamleader->postCall('tickets.addReply', [
            'body' => json_encode($data),
        ]);
    }

    /**
     * Adds a message to a ticket.
     */
    public function addInternalMessage($id, $data)
    {
        $data['id'] = $id;

        return $this->teamleader->postCall('tickets.addInternalMessage', [
            'body' => json_encode($data),
        ]);
    }

    /**
     * Get a list of ticket statuses.
     */
    public function ticketStatuses($data = [])
    {
        return $this->teamleader->postCall('ticketStatus.list', [
            'body' => json_encode($data),
        ]);
    }
}
