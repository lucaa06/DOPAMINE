<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../../index.php");
    exit();
}
?>
<html>
  <head>
    <title>Dopamine - Visualization</title>
    <script type="text/javascript" src="https://unpkg.com/vis-network/standalone/umd/vis-network.min.js"></script>
    <style type="text/css">
        #mynetwork {
            width: 100%;
            height: 100vh;
            border: 1px solid lightgray;
        }
    </style>
  </head>
  <body>
    <div id="mynetwork"></div>
    <script type="text/javascript">
        fetch('../../backend/visualization.php')
            .then(response => response.json())
            .then(data => {
                // create an array with nodes
                var nodes = new vis.DataSet(data.nodes);

                // create an array with edges
                var edges = new vis.DataSet(data.edges);

                // create a network
                var container = document.getElementById('mynetwork');
                var data = {
                    nodes: nodes,
                    edges: edges
                };
                var options = {};
                var network = new vis.Network(container, data, options);
            });
    </script>
  </body>
</html>
