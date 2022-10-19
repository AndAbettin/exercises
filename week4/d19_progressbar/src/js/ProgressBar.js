export class ProgressBar {
  constructor(value, gradient, maxVal, rVal, gVal, bVal) {
    this.value = value ?? 0;
    this.gradient = gradient ?? 1;
    this.maxVal = maxVal ?? 10;
    this.rVal = rVal;
    this.gVal = gVal;
    this.bVal = bVal;


    this.element = document.createElement('div');
    this.refreshElement();
  }

  refreshElement() {
    this.element.innerHTML = `
      <div class="label">
        ${this.value}/${this.maxVal}
      </div>
      <div class="progress">
         <div class="btn-minus"></div>
         <div class="bar">
           <div style="width: ${this.value / this.maxVal * 100}%; background-color: rgb(${this.rVal}, ${this.gVal}, ${this.bVal});" class="knob"></div>
         </div>
         <div class="btn-plus"></div>
      </div>
    `;

    const plusBtn = this.element.querySelector('.btn-plus');
    plusBtn.addEventListener('click', () => {
      this.value = Math.min(this.maxVal, this.value + this.gradient);
      this.refreshElement();
    });

    const minusBtn = this.element.querySelector('.btn-minus');
    minusBtn.addEventListener('click', () => {
      this.value = Math.max(0, this.value - this.gradient);
      this.refreshElement()
    })
  }
}
