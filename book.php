<!DOCTYPE html>
<html>

<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Hotel Reservation Form</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="book.css">
		<link rel="stylesheet" href="C:\Users\Jeremy\Desktop\museo_sans_ssv\Museo Sans 100">

	</head>
<body>
<form class="hotel-reservation-form" action="connect.php" method="post">
<h1><i class="far fa-calendar-alt"></i>MAKE A RESERVATION</h1>
<div class="fields">

<label for="room">Select Room/Conference</label>
<div class="field">
<select  name="roomtype" id="box" required>
<option select value="">--Room/Conference--</option>
<optgroup label="Rooms">
<option value="familyinter">Family Interconnecting Room</option>
<option value="twin">Superior twin</option>
<option value="suproom">Superior Room</option>
<option value="standroom">Standard Room</option>
<option value="execroom">Executive Room</option>
<option value="royroom">Royal Suite</option>
<option value="famdouble">Family Double</option>
</optgroup>
<optgroup label="Conferences">
<option value="board">Board Meetings</option>
<option value="conference">Conferences</option>
<option value="Weddings&Birthdays">Weddings & Birthdays</option>
<option value="parties">Awesome Parties </option>
</optgroup>
</select>
</div>
<label for="meal">Meal plan</label>
<div class="field">
<select  name="meal" id="box">
<option value="select">-Bed & Breakfast-</option>
<option value="hboard">half board </option>
<option value="fboard">full board </option>
</select>
</div>

<div class="wrapper">
<div>
<label for="adate">Arrival Date</label>
<div class="field">
<input type="date" name="arrival" id="box" min="2023-01-01">
</div>
<div class="gap"></div>
<div>
<label for="ddate">Departure date</label>
<div class="field">
<input type="date" name="departure" id="box" >
</div>
</div>
</div>
</div>
<div class="wrapper">
<div>
<label for="adult">Adults</label>
<div class="field">
<select  name="adult" id="box" required>
<option value="select">-Adult-</option>
<option value="adult1">1 Adult </option>
<option value="adult2">2 Adults </option>
<option value="adult3">3 Adults </option>
<option value="adult4">4 Adults </option>
<option value="adult5">5 Adults </option>
</select>
</div>
</div>
<div class="gap"></div>
<div>
<label for="child">Child</label>
<div class="field">
<select  name="child" id="box" required>
   <option value="select">-Child-</option>
 <option value="0">0 Child </option>
<option value="2">1 Child </option>
<option value="3">2 Child </option>
</select>
</div>
</div>
        </div>

<label for="name">Name</label><br>
<div class="field">
<i class="fas fa-user"></i>
<input type="text" name="name" id="box" placeholder="Full Name" required>
</div>
<label for="no">Phone Number</label>
<div class="field">
<i class="fas fa-phone"></i>
<input type="tel" name="phoneno" id="box" placeholder="Phone No." required>
</div>
<label for="email">Email</label><br>
<div class="field">
<i class="fas fa-envelope"></i>
<input type="email" name="email" id="box" placeholder="Email Address" required>
</div>
<label for="request">Special Request</label><br>
<div class="field">
<i class="fas fa-user"></i>

<input type="text"  name="request" id="box">
</div>
</div>
<input type="submit" value="Reserve">

        </form>
</body>

</html>

















