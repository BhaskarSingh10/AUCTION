const MAP = {
  "auctions.php": "addauction",
};
document.addEventListener("DOMContentLoaded", function () {
  const navItems = document.querySelectorAll(".rd-nav-item");
  const countdowns = document.querySelectorAll(".countdown");
  if (navItems.length) {
    navItems.forEach((navItem) => {
      const anchor = navItem.firstChild;
      if (anchor) {
        const h = anchor.href ? anchor.href.split("/").slice(-1)[0] : "";

        if (
          window.location.pathname.includes(h) ||
          window.location.pathname.includes(MAP[h])
        ) {
          navItem.classList.add("active");
        } else {
          navItem.classList.remove("active");
        }
      }
    });
  }

  if (countdowns.length) {
    for (var i = 0; i < countdowns.length; i++) {
      const startTime = new Date(countdowns[i].getAttribute("startTime"));

      if (startTime < new Date()) {
        const time = new Date(countdowns[i].getAttribute("endTime")).getTime();
        const countdown = new Countdown(time, countdowns[i]);

        countdown.enableField({
          year: false,
          month: false,
          day: true,
          hour: true,
          minute: true,
          second: true,
        });
        countdown.display();
        countdowns[i].style.removeProperty("display");
      }
    }
  }
});
