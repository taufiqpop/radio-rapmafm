// Time Zone Responsive
window.onload = function () {
  jam();
};

function jam() {
  let e: any = document.getElementById("jam"),
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

function set(e: any): any {
  e = e < 10 ? "0" + e : e;
  return e;
}

// Active Page Highlight On Click
$(document).ready(function (): any {
  let nav: any = $("a[href='" + window.location.href + "']");
  nav.parent().addClass("active");
});

// Preview Images
function previewImgUser() {
  const imgUser: any = document.querySelector("#imgUser");
  const imgUserLabel: any = document.querySelector(".custom-file-label");
  const imgUserPreview: any = document.querySelector(".img-preview");

  imgUserLabel.textContent = imgUser.files[0].name;

  const fileImgUser: any = new FileReader();
  fileImgUser.readAsDataURL(imgUser.files[0]);

  fileImgUser.onload = function (e: any): any {
    imgUserPreview.src = e.target.result;
  };
}

function previewImgRapma(): any {
  const imgRapma: any = document.querySelector("#imgRapma");
  const imgRapmaLabel: any = document.querySelector(".custom-file-label");
  const imgRapmaPreview: any = document.querySelector(".img-preview");

  imgRapmaLabel.textContent = imgRapma.files[0].name;

  const fileImgRapma: any = new FileReader();
  fileImgRapma.readAsDataURL(imgRapma.files[0]);

  fileImgRapma.onload = function (e: any): any {
    imgRapmaPreview.src = e.target.result;
  };
}
