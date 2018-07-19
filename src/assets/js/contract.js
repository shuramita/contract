var Web3 = require('web3');
var web3 = new Web3(Web3.givenProvider || "ws://localhost:8546");

var contractInterface = require("../../SolidityContracts/build/contracts/TenancyAgreement.json");

var contract = new web3.eth.Contract(contractInterface.abi);
contract.deploy({
    data:contractInterface.bytecode,
    arguments:[
        '0xee66AE5AbbFE633A9c8FA1c6c87B0caD95Fb1D21'
    ]
}).send({
        from: '0xee66AE5AbbFE633A9c8FA1c6c87B0caD95Fb1D21',
        gas: 820000, // UNIT
        gasPrice: '45000000000' // WEI 1GWEI = 10^6 WEI
    }, function(error, transactionHash){

    })
    .on('error', function(error){

    })
    .on('transactionHash', function(transactionHash){

    })
    .on('receipt', function(receipt){
        console.log(receipt.contractAddress) // contains the new contract address
    })
    .on('confirmation', function(confirmationNumber, receipt){

    })
    .then(function(newContractInstance){
        console.log(newContractInstance.options.address) // instance with the new contract address
    });

console.log(web3.eth.defaultAccount);

exports.contract = {
    namespace:"contract",
    config:{},
    controller:{}
};