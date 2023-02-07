<?php
include "php_serial.class.php";

// Set the serial port parameters
$serial = new phpSerial;
$serial->deviceSet("/dev/ttyS0");
$serial->confBaudRate(9600);
$serial->confParity("none");
$serial->confCharacterLength(8);
$serial->confStopBits(1);

// Open the serial port
$serial->deviceOpen();

// Read data from the serial port
$read = $serial->readPort();

// Close the serial port
$serial->deviceClose();

// Do something with the data read from the UHF reader
echo $read;
?>
