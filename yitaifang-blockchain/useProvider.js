var {ethers} = require("ethers");

let addr = ethers.getAddress("0x8ba1f109551bd432803012645ac136ddd64dba72");

//addr = ethers.getAddress("0x8Ba1f109551bD432803012645Ac136ddd64DBA72");

console.log(addr)

console.log(ethers.EtherSymbol);
console.log(ethers.MaxInt256);
console.log(ethers.N);
console.log(ethers.MessagePrefix)
console.log(ethers.WeiPerEther)
console.log(ethers.ZeroHash);
console.log(ethers.ZeroAddress);

let hash1 = ethers.keccak256("0x");
console.log(hash1)


let provider = new ethers.getDefaultProvider();

console.log(ethers.ethereum);
console.log(JSON.stringify(provider));

provider.getBlockNumber().then((v) => console.log(v));






