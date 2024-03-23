<?php
// Includes the character class definition from another file.
// This is necessary because the staff class extends the character class.
require_once("character.php");

// Defines the staff class which inherits from the character class.
class staff extends character {
    // Private property to hold the staff's unique code.
    private $staffcode;
    // Private property to hold the staff's department or part.
    private $part;

    // Constructor method for the staff class.
    // It takes the full name, country code, and part (department) of the staff as parameters.
    public function __construct($fullname_staff, $countrycode, $part) {
        // Calls the parent (character) class's constructor with full name and country code.
        parent::__construct($fullname_staff, $countrycode);
        // Sets the part (department) of the staff.
        $this->part = $part;
        // Generates a unique staff code by calling the staffcode_continue method.
        $this->staffcode = $this->staffcode_continue();
    }

    // Public method to get the staff's unique code.
    public function get_staffcode() {
        return $this->staffcode;
    }

    // Public method to get the staff's department or part.
    public function get_part() {
        return $this->part;
    }

    // Private method to generate a continuous staff code.
    // It uses a static variable $makecode that is incremented each time the method is called,
    // ensuring each staff member gets a unique code.
    private function staffcode_continue() {
        static $makecode = 1;
        return $makecode++;
    }
}
?>
