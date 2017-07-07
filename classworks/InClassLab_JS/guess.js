
var num = Math.floor(Math.random() * 100) + 1;
var trial = 101;
var text = 'Guess a number in between 1 to 100!';

while (trial > 0) {
  var count = prompt(text);
  if (!count) break;
  count = Number(count);
  if (count == num) {
    document.write('<p>CONGRATULATIONS!YOU WON!</p>' +
      '<p><img src="trophy.jpeg">');
    trial = 0;
  } else {
    text = 'Not correct!';
    if (count < num) text += ' Too small!';
    if (count > num) text += ' Too big!';
    trial = trial - 1;
  }
}
alert('Yes! The correct number is ' + num + '.');