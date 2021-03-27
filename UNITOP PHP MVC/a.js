(() => {
  number = 100;
  (() => {
    number = 1000;
  })();
  console.log("3", number);
})();

(() => {
  num = 50;
  (() => {
    num = 500;
  })();
  console.log("n", num);
})();
(() => {
  num = 50;
  () => {
    num = 500;
  };
  console.log("n", num);
})();

let a = "77";
let b = 77;
let c = 076;
console.log(typeof a);
console.log(a);
console.log(typeof b);
console.log(b);
console.log(typeof c);
console.log(c);

var d = 022;
var e = 22;

if (d === e) console.log(true);
else console.log(false);

if (077 == 77) {
  console.log("True");
} else {
  console.log("Failed");
}
