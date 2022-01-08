
<html> 
<head>
<title>Memo</title>
</head>
<body>
<h1>Form a sentence</h1>
<form action = "mysentence.php" method="post">
<table>
<tr>
  <th>Who</th>
  <th>Day</th>
  <th>Subject</th>
  <th>Color</td>
</tr>
<tr>
  <td>
    <select size = 4 name = "Who">
      <option value = "Meredith Grey">Meredith Grey</option>
      <option value = "Derek Sherpherd">Derek Sherpherd</option>
      <option value = "Alex Karev">Alex Karev</option>
      <option value = "Jackson Avery">Jackson Avery</option>
      <option value = "Mark Sloan">Mark Sloan</option>
      <option value = "Jo Wilson">Jo Wilson</option>
      <option value = "Owen Hunt">Owen Hunt</option>
  </td>
  <td>
    <select name = "Day">
      <option value = "Sun">Sun</option>
      <option value = "Mon">Mon</option>
      <option value = "Tues">Tues</option>
      <option value = "Wed">Wed</option>
      <option value = "Thurs">Thurs</option>
      <option value = "Fri">Fri</option>
      <option value = "Sat">Sat</option>
  </td>
  <td>
      <input type = "radio" name = "subject" value = "Plans for this week">Plans for this week<br>
      <input type = "radio" name = "subject" value = "Long term projects">Long term projects<br>
      <input type = "radio" name = "subject" value = "Business trip">Business trip<br>
      <input type = "radio" name = "subject" value = "Message from client">Message from client<br>
      <input type = "radio" name = "subject" value = "Problem with project">Problem with project<br>
  </td>
  <td>
    <select size = 7 name = "fontcolor">
      <option value = "red">red</option>
      <option value = "orange">orange</option>
      <option value = "yellow">yellow</option>
      <option value = "green">green</option>
      <option value = "blue">blue</option>
      <option value = "indigo">indigo</option>
      <option value = "violet">violet</option>
  </td>
</tr>
</table>
<input type = "submit" value = "SEND INFORMATION">
</form>
<a href="javascript:location.reload(true)">Refresh page</a>
</body>
</html>