<section id="video" class="section-p1">
  <div class="video-container">
    <video id="myVideo" controls muted>
      <source src="restauran.mp4" type="video/mp4">
    </video>
    <div class="box-icon" id="boxIcon">
      <button id="play"><span class="op-play"><i class="fa-solid fa-play"></i></span></button>
    </div>
  </div>
  <div class="process-container">
    <div class="pro-text">   
      <h2>OUR PROCESS</h2>
    <h3>Find out everything you need to know about creating a business process model</h3>
  </div>
 
    <div class="pro-setp">
      <div class="box-pro">
        <i class="fa-regular fa-lightbulb"></i>
        <h4>1. Concept</h4>
        <p>Nulla vitae elit libero elit non porta gravida eget metus cras.</p>
      </div>
      <div class="box-pro">
      <i class="fa-solid fa-desktop"></i>
        <h4>2. Concept</h4>
        <p>Nulla vitae elit libero elit non porta gravida eget metus cras.</p>
      </div>
      <div class="box-pro">
      <i class="fa-solid fa-pen-nib"></i>
        <h4>3. Concept</h4>
        <p>Nulla vitae elit libero elit non porta gravida eget metus cras.</p>
      </div>
    </div>
  </div>
</section>












<!-- script ปุ่มกด Play -->
<script>
  document.getElementById('play').addEventListener('click', function() {
    var video = document.getElementById('myVideo');
    var boxIcon = document.getElementById('boxIcon');

    if (video.paused) {
      video.play();
      boxIcon.style.display = 'none';
    } else {
      video.pause();
      boxIcon.style.display = 'block';
    }
  });

  document.getElementById('myVideo').addEventListener('play', function() {
    document.getElementById('boxIcon').style.display = 'none';
  });

  document.getElementById('myVideo').addEventListener('pause', function() {
    document.getElementById('boxIcon').style.display = 'block';
  });
</script>