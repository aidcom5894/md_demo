var options = {
	chart: {
		height: 230,
		type: "area",
		zoom: {
			enabled: false,
		},
		toolbar: {
			show: false,
		},
	},
	dataLabels: {
		enabled: false,
	},
	stroke: {
		curve: "smooth",
		width: 7,
	},
	series: [
		{
			name: "Orders",
			data: [
				100, 300, 200, 500, 300, 600, 400, 700, 500, 800, 600, 900, 700, 900,
			],
		},
	],
	grid: {
		borderColor: "#bede68",
		strokeDashArray: 0,
		show: false,
		xaxis: {
			lines: {
				show: false,
			},
		},
		yaxis: {
			lines: {
				show: false,
			},
		},
		padding: {
			top: -20,
			right: 10,
			bottom: 0,
			left: 10,
		},
	},
	xaxis: {
		labels: {
			show: false,
		},
	},
	yaxis: {
		show: false,
	},
	fill: {
		type: "gradient",
		gradient: {
			type: "vertical",
			shadeIntensity: 1,
			inverseColors: !1,
			opacityFrom: 0.4,
			opacityTo: 0,
			stops: [15, 100],
		},
	},
	colors: ["#ffffff"],
	markers: {
		size: 0,
		opacity: 0.2,
		colors: ["#ffffff"],
		strokeColor: "#49914E",
		strokeWidth: 2,
		hover: {
			size: 10,
		},
	},
	tooltip: {
		y: {
			formatter: function (val) {
				return val;
			},
		},
	},
};

var chart = new ApexCharts(document.querySelector("#ordersGraph"), options);

chart.render();
