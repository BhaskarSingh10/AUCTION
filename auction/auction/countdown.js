class Countdown {
  constructor(time, target) {
    this.time = time;
    this.target = target;
    this.start = Date.now();
    this.diff =
      this.year =
      this.month =
      this.day =
      this.hour =
      this.minute =
      this.second =
        "";
    this.enableFields = {
      year: false,
      month: false,
      day: true,
      hour: true,
      minute: true,
      second: true,
    };
  }

  enableField(setting) {
    this.enableFields = setting;
    return this;
  }

  doCountdown() {
    this.diff = this.time - Date.now();
    this.year = Math.floor(this.diff / (1000 * 60 * 60 * 24 * 365));
    this.month = Math.floor(
      (this.diff % (1000 * 60 * 60 * 24 * 365)) / (1000 * 60 * 60 * 24 * 30.44)
    );
    this.day = Math.floor(this.diff / (1000 * 60 * 60 * 24));
    this.hour = Math.floor(
      (this.diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    this.minute = Math.floor((this.diff % (1000 * 60 * 60)) / (1000 * 60));
    this.second = Math.floor((this.diff % (1000 * 60)) / 1000);

    this.hour = this.hour.toString().length < 2 ? "0" + this.hour : this.hour;
    this.minute =
      this.minute.toString().length < 2 ? "0" + this.minute : this.minute;
    this.second =
      this.second.toString().length < 2 ? "0" + this.second : this.second;

    this.target.innerHTML = this.render();
  }

  render() {
    let time = "";
    if (this.enableFields.year && this.year > 0) {
      time += this.year + (this.year > 1 ? " years " : " year ");
    }
    if (this.enableFields.month && this.month > 0) {
      time += this.month + (this.month > 1 ? " months " : " month ");
    }
    if (this.enableFields.day && this.day > 0) {
      time += this.day + (this.day > 1 ? " days " : " day ");
    }
    if (this.enableFields.hour) {
      if (this.hour != "") time += this.hour + ":";
    }
    if (this.enableFields.minute) {
      if (this.minute != "") time += this.minute + ":";
    }
    if (this.enableFields.second) {
      if (this.second != "") time += this.second;
    }
    return time;
  }

  display() {
    this.doCountdown();
    setInterval(this.doCountdown.bind(this), 1000);
  }
}
