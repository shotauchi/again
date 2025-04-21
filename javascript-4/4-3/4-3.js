
class Item {
    
   constructor(Chair, second_Hand) {
        //　引数の値を使ってプロパティの初期化を行う
        this.Chair = Chair;
        this.second_Hand = second_Hand;
         
    }
    
 
    getChair() {
        return this.chair;
    }
    
    getSecond_Hand() {
        return this.second_Hand;
    }
    
}

let item1 = new Item('0001', '新品の椅子', 50);
let item2 = new Item('0002', '中古の椅子', 60);
let item3 = new Item('0003', '古い椅子', 20);
let item4 = new Item('0004', '赤い椅子', 10);
let item5 = new Item('0005', '青い椅子', 30);
let item6 = new Item('0006', '黄色い椅子', 40);

console.log(item1.getChair(), item1.getsecond_Hand());
console.log(item2.getChair(), item2.getsecond_Hand());
console.log(item3.getChair(), item3.getsecond_Hand());
console.log(item4.getChair(), item4.getsecond_Hand());
console.log(item5.getChair(), item5.getsecond_Hand());
console.log(item6.getChair(), item6.getsecond_Hand());
