function daysUntilChristmas() {
  var today = new Date();
  var christmas = new Date(today.getFullYear(), 11, 25);

  if (today.getMonth() === 11 && today.getDate() > 25) {
    christmas.setFullYear(christmas.getFullYear() + 1);
  }

  var timeDifference = christmas.getTime() - today.getTime();
  var days = Math.ceil(timeDifference / (1000 * 60 * 60 * 24));

  return days;
}
var daysToChristmas = daysUntilChristmas();
console.log(daysToChristmas);
