new Vue ({
  el: "#app",
  data() {
    return {
      prizes: [ 10, 20000, 50, 5000, 100, 250, 10000, 500, 1000, 2500, 100000, 50000 ],
      activeBtn: false,
      deg: 0
    };
  },
  methods: {
    spin() {
      this.activeBtn = true;
       // console.log(this.activeBtn);
      //setTimeout(() => (this.activeBtn = false), 5100);

      let spins = Math.floor(Math.random() * 7) + 9; //perform between 9 and 15 spins
      console.log("spins: " + spins);

      //let wheelAngle = Math.floor(Math.random() * 12) * 30; //set wheel angle rotation
      let wheelAngle = 180; //set wheel angle rotation
      console.log("wheelAngle: " + wheelAngle);

      let sectorAngle = Math.floor(Math.random() * 14) + 1; //set sector angle rotation
      sectorAngle *= Math.floor(Math.random() * 2) == 1 ? 1 : -1; //between -14deg and +14deg (28deg range of 30deg sector)
      console.log("sectorAngle: " + sectorAngle);
      this.deg += 360 * spins + wheelAngle + sectorAngle;
        
      document.querySelector(
        ".inner"
      ).style.transform = `rotate(${this.deg}deg)`;

      setTimeout(() => (this.deg -= sectorAngle), 100); //reset sector angle rotation to avoid angle > +-44deg on next rotation

      let index = Math.floor((this.deg - sectorAngle) / 30) % 12; //get the prize
      console.log("prize index:" + index);
      console.log("you will win: " + this.prizes[index]);
        setTimeout(() => (window.location.href = "congrats.html"), 6000);
    }
  }
})
