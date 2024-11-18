<section id="card-prices" class="section-p1">
  <div class="cd-pr-text">
    <h2>
      OUR PRICING
    </h2>
    <h3>We offer great prices, premium products and quality service for your business.</h3>
    <div class="pricing-top">
      <p class="pr-monthly">Monthly</p>

      <label class="switch">

        <input type="checkbox" id="pricing-toggle">
        <span class="slider round"></span>
      </label>
      <p class="pr-save">Yearly</p>
    </div>
  </div>
  <div class="cd-pr-container">


    <div class="cd-pr">
      <div class="cd-box">
        <div class="card-icon">
          <i class="fa-solid fa-basket-shopping"></i>
          <h4>Basic Plan</h4>
        </div>
        <div class="card-top" id="premium-card-top">
          <span class="card-s">$</span>
          <h1 id="premium-price">9</h1>
          <span class="card-mo">/mo</span>
        </div>
        <ul>
          <li><span class="icon-circle"><i class="fa-solid fa-check"></i></span>1 Project</li>
          <li><span class="icon-circle"><i class="fa-solid fa-check"></i></span>100K API Access</li>
          <li><span class="icon-circle"><i class="fa-solid fa-check"></i></span>100MB Storage</li>

          <li><span class="icon-circle"><i class="fa-solid fa-check"></i></span>Weekly Reports</li>
          <li><span class="icon-circle"><i class="fa-solid fa-check"></i></span>7/24 Support</li>
          <button>Choose plan</button>
        </ul>

      </div>
    </div>
    <div class="cd-pr">
      <div class="cd-box">
        <div class="card-icon">
          <i class="fa-solid fa-house"></i>
          <h4>Premium Plan</h4>
        </div>
        <div class="card-top" id="premium-card-top">
          <span class="card-s">$</span>
          <h1 id="corporate-price">19</h1>
          <span class="card-mo">/mo</span>
        </div>
        <ul>
          <li><span class="icon-circle"><i class="fa-solid fa-check"></i></span>1 Project</li>
          <li><span class="icon-circle"><i class="fa-solid fa-check"></i></span>100K API Access</li>
          <li><span class="icon-circle"><i class="fa-solid fa-check"></i></span>100MB Storage</li>

          <li><span class="icon-circle"><i class="fa-solid fa-check"></i></span>Weekly Reports</li>
          <li><span class="icon-circle"><i class="fa-solid fa-check"></i></span>7/24 Support</li>
          <button>Choose plan</button>
        </ul>

      </div>
    </div>
    <div class="cd-pr">
      <div class="cd-box">
        <div class="card-icon">
          <i class="fa-solid fa-bag-shopping"></i>
          <h4>Corporate Plan</h4>
        </div>
        <div class="card-top" id="premium-card-top">
          <span class="card-s">$</span>
          <h1 id="enterprise-price">49</h1>
          <span class="card-mo">/mo</span>
        </div>
        <ul>
          <li><span class="icon-circle"><i class="fa-solid fa-check"></i></span>1 Project</li>
          <li><span class="icon-circle"><i class="fa-solid fa-check"></i></span>100K API Access</li>
          <li><span class="icon-circle"><i class="fa-solid fa-check"></i></span>100MB Storage</li>

          <li><span class="icon-circle"><i class="fa-solid fa-check"></i></span>Weekly Reports</li>
          <li><span class="icon-circle"><i class="fa-solid fa-check"></i></span>7/24 Support</li>
          <button>Choose plan</button>
        </ul>

      </div>
    </div>
  </div>
</section>


<script>
document.addEventListener('DOMContentLoaded', function() {
  const toggle = document.getElementById('pricing-toggle');
  const premiumPrice = document.getElementById('premium-price');
  const corporatePrice = document.getElementById('corporate-price');
  const enterprisePrice = document.getElementById('enterprise-price');

  toggle.addEventListener('change', function() {
      if (toggle.checked) {
          // เปลี่ยนค่าเป็นรายปี
          premiumPrice.textContent = '99'; // ราคาเมื่อเลือกเป็นรายปี
          corporatePrice.textContent = '199'; // ราคาเมื่อเลือกเป็นรายปี
          enterprisePrice.textContent = '399'; // ราคาเมื่อเลือกเป็นรายปี
          document.querySelectorAll('.card-mo').forEach(el => el.textContent = '/yr'); // เปลี่ยนหน่วยเป็นต่อปี
      } else {
          // เปลี่ยนค่าเป็นรายเดือน
          premiumPrice.textContent = '19'; // ราคาเมื่อเลือกเป็นรายเดือน
          corporatePrice.textContent = '49'; // ราคาเมื่อเลือกเป็นรายเดือน
          enterprisePrice.textContent = '99'; // ราคาเมื่อเลือกเป็นรายเดือน
          document.querySelectorAll('.card-mo').forEach(el => el.textContent = '/mo'); // เปลี่ยนหน่วยเป็นต่อเดือน
      }
  });
});

</script>