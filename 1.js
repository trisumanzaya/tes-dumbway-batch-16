const check = (datakey,word) => {
    datakey.forEach(data => {
        let key = word.search(data)
        if(key >= 0) {
            console.log(data + " => " + true)
        } else {
            console.log(data + " => " + false)
        }
    });
}

let str = "dumbways"
let arr = ["dumb", "ways", "the", "best"]

check(arr,str)
