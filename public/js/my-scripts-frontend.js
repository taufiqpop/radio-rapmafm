// Time Zone Responsive
window.onload = function () {
  jam();
};

function jam() {
  var e = document.getElementById("jam"),
    d = new Date(),
    h,
    m,
    s;
  h = d.getHours();
  m = set(d.getMinutes());
  s = set(d.getSeconds());

  e.innerHTML = h + ":" + m + ":" + s;

  setTimeout("jam()", 1000);
}

function set(e) {
  e = e < 10 ? "0" + e : e;
  return e;
}

// Live Chat
window.$crisp = [];
window.CRISP_WEBSITE_ID = "4bbd8b5a-383b-4e19-a6d4-e38e5493e085";
(function () {
  d = document;
  s = d.createElement("script");
  s.src = "https://client.crisp.chat/l.js";
  s.async = 1;
  d.getElementsByTagName("head")[0].appendChild(s);
})();
