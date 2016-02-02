(function () {
    var transport = new Thrift.Transport('http://localhost:8000/delivery/json');
    var protocol = new Thrift.Protocol(transport);
    var client = new Mesh.Delivery.DeliveryServiceClient(protocol);

    $(document).ready(function () {
        $('.get-delivery-button').click(function () {
            client.getDelivery("32lkd8uUe7j3", 51, true).done(function (delivery) {
                alert(delivery.id);
            });
        });
    });
})();



//# sourceMappingURL=main.js.map
