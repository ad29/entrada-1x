<?php

/**
 * Entrada [ http://www.entrada-project.org ]
 *
 * Entrada is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Entrada is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Entrada.  If not, see <http://www.gnu.org/licenses/>.
 *
 * This file contains all of the functions used within Entrada.
 *
 * @author Organisation: Queen's University
 * @author Unit: School of Medicine
 * @author Developer: Jonathan Fingland <jonathan.fingland@queensu.ca>
 * @copyright Copyright 2010 Queen's University. All Rights Reserved.
 *
*/
require_once("Models/utility/SimpleCache.class.php");
require_once("Models/courses/Course.class.php");
require_once("Models/events/EventContacts.class.php");

/**
 * Simple User class with basic information
 * 
 * @author Organisation: Queen's University
 * @author Unit: School of Medicine
 * @author Developer: Jonathan Fingland <jonathan.fingland@quensu.ca>
 * @copyright Copyright 2010 Queen's University. All Rights Reserved.
 */
class Event {
	private $event_id,
			$recurring_id,
			$region_id,
			$course_id,
			$event_phase,
			$event_title,
			$event_description,
			$event_goals,
			$event_objectives,
			$event_message,
			$event_location,
			$event_start,
			$event_finish,
			$event_duration,
			$release_date,
			$release_until,
			$updated_date,
			$updated_by;
	
	function __construct(	$event_id,
							$recurring_id,
							$region_id,
							$course_id,
							$event_phase,
							$event_title,
							$event_description,
							$event_goals,
							$event_objectives,
							$event_message,
							$event_location,
							$event_start,
							$event_finish,
							$event_duration,
							$release_date,
							$release_until,
							$updated_date,
							$updated_by
							) {
		$this->event_id = $event_id;
		
		$this->recurring_id = $recurring_id;
		$this->region_id = $region_id;
		$this->course_id = $course_id;
		$this->event_phase = $event_phase;
		$this->event_title = $event_title;
		$this->event_description = $event_description;
		$this->event_goals = $event_goals;
		$this->event_objectives = $event_objectives;
		$this->event_message = $event_message;
		$this->event_location = $event_location;
		$this->event_start = $event_start;
		$this->event_finish = $event_finish;
		$this->event_duration = $event_duration;
		$this->release_date = $release_date;
		$this->release_until = $release_until;
		$this->updated_date = $updated_date;
		$this->updated_by = $updated_by;
		
		//be sure to cache this whenever created.
		$cache = SimpleCache::getCache();
		$cache->set($this,"Event",$this->event_id);
	}
	
	/**
	 * Returns the id of the event
	 * @return int
	 */
	public function getID() {
		return $this->event_id;
	}
	
	/**
	 * @return RecurringEvent
	 */
	public function getRecurringEvent() {
		//TODO return RecurringEvent data after class created
	}
	
	
	public function getEventComponents() {
		//TODO return from event_eventtypes table after new class created 
	}
	
	public function getRegion() {
		//TODO return region obj
	}
	
	/**
	 * @return Course
	 */
	public function getCourse() {
		return Course::get($course_id);
	}
	
	public function getPhase() {
		return $this->getPhase();	
	}
	
	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->event_title;
	}
	
	public function getDescription() {
		return $this->event_description;
	}
	
	public function getGoals() {
		return $this->event_goals;
	}
	
	public function getObjectives() {
		return $this->event_objectives;
	}
	
	/**
	 * @return EventContacts
	 */
	public function getContacts() {
		return EventContacts::get($this->event_id);
	}
	
	//TODO Complete creation of getters, update, etc
	
	public function isOwner(User $user) {
		//check first if they are course owner, then check the event contacts.
		$course = $this->getCourse();
		if ($course->isOwner($user)) {
			return true;
		} else {
			$contacts = $this->getContacts();
			return $contacts->contains($user);
		}
	}
	
	public static function get($event_id) {
		$cache = SimpleCache::getCache();
		$event = $cache->get("Event",$event_id);
		if (!$user) {
			global $db;
			$query = "SELECT * FROM `events` WHERE `id` = ".$db->qstr($event_id);
			$result = $db->getRow($query);
			if ($result) {
				$event = new Event($result['event_id'],$result['recurring_id'],$result['region_id'],$result['course_id'],$result['event_phase'],$result['event_title'],$result['event_description'],$result['event_goals'],$result['event_objectives'],$result['event_message'],$result['event_location'],$result['event_start'],$result['event_finish'],$result['event_duration'],$result['release_date'],$result['release_until'],$result['updated_date'],$result['updated_by']);
			}		
		} 
		return $user;
	}
}