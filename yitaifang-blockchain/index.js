//var {Web3} = require("web3")

var Web3 = require('web3');
const web3 = new Web3("https://cloudflare-eth.com")

web3.eth.getBlockNumber(function (error, result) {
    console.log(result)
})

async function getBlockNumber() {
    const latestBlockNumber = await web3.eth.getBlockNumber()
    console.log(latestBlockNumber)
    return latestBlockNumber
}

getBlockNumber();

web3.eth.defaultBlock = 18269393;

web3.eth.isMining().then(console.log);
// web3.eth.getCoinbase();
// web3.eth.getUncle().then((v) => console.log(v))
console.log(web3.eth.currentProvider)

173611671565DC7cc482E48c851951ec022383e3