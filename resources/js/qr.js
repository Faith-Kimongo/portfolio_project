function toggleCamera() {
    var qrCode = document.getElementById("btn-scan-qr");
    var camera = document.getElementById("camera");

    qrCode.classList.toggle("hidden");
    camera.classList.toggle("hidden");

    // Start camera stream if it's not already started
    if (!camera.srcObject) {
      startCamera();
    }
  }

  function startCamera() {
    // Check browser support for mediaDevices API
    if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
      // Access the camera stream
      navigator.mediaDevices.getUserMedia({ video: true })
        .then(function(stream) {
          var camera = document.getElementById("camera");
          camera.srcObject = stream;
          camera.play();
        })
        .catch(function(error) {
          console.error("Error accessing camera: ", error);
        });
    } else {
      console.error("getUserMedia not supported");
    }
  }