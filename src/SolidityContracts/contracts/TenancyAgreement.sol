pragma solidity ^0.4.22;

contract TenancyAgreement {

    // maker
    address maker;
    // List of tenants and list of landlords
    address[] tenants;

    // Landlord address
    address[] landlords;

    address agent;

    bool agentEnabled = false;

    struct Property {
        uint id;
        string location;

    }

    Property property;

    struct DigitalContract {
        // Start day of contract
        uint start_date;
        // end date of contract
        uint end_date;
        // total price of contract
        uint price;
    }

    DigitalContract digitalContract;

    modifier onlyLandlords() { // Modifier
        require(
            msg.sender == landlords[0],
            "Only seller can call this."
        );
        _;
    }
    modifier onlyMaker() { // Modifier
        require(
            msg.sender == maker,
            "Only seller can call this."
        );
        _;
    }
    function setLandlords(address[] _landlords) public  onlyMaker{
        landlords = _landlords;
    }

    function setTenants(address[] _tenants) public  onlyMaker {
        tenants = _tenants;
    }

    function setAgent(address _agent) public  onlyLandlords{
        agent = _agent;

    }

    function enableAgent() public onlyLandlords {
        agentEnabled = true;
    }

}