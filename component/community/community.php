<section id="community" class="section-p1">
  <div class="co-top">
    <h2>JOIN OUR COMMUNITY</h2>
    <h3>We are trusted by over 5000+ clients. Join them now and grow your business.</h3>
  </div>
  <div class="co-down">
    <div>
      <h3 class="counter" data-target="7518">0</h3>
      <p>Completed Projects</p>
    </div>
    <div>
      <h3 class="counter" data-target="7518">0</h3>
      <p>Satisfied Customers</p>
    </div>
    <div>
      <h3 class="counter" data-target="7518">0</h3>
      <p>Expert Employees</p>
    </div>
  </div>
</section>
<script>
  document.addEventListener('DOMContentLoaded', () => {
  const counters = document.querySelectorAll('.counter');
  const speed = 200; // ความเร็วในการเพิ่มตัวเลข

  counters.forEach(counter => {
    const updateCount = () => {
      const target = +counter.getAttribute('data-target');
      const count = +counter.innerText;
      const increment = target / speed;

      if (count < target) {
        counter.innerText = Math.ceil(count + increment);
        setTimeout(updateCount, 10); // อัปเดตตัวเลขทุก 10 มิลลิวินาที
      } else {
        counter.innerText = target;
      }
    };

    updateCount();
  });
});

</script>