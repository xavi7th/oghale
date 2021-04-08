import { mediaHandler, toCurrency } from "@public-shared/helpers";

const displayTableSum = (tableColumn) => {
		if (!tableColumn) {
			return;
		}
	return function(row, data, start, end, display) {
		var api = this.api(),
			data;

		// Remove the formatting to get integer data for summation
		var intVal = function(i) {
			return typeof i === "string" ? // ? i.replace(/[\$,]/g, "") * 1
				i.substring(0, i.lastIndexOf("."))
				.replace(/[^0-9\.\-]+/g, "") * 1:
				typeof i === "number" ?
				i :
				0;
		};

		// Total over all pages
		let total = api
			.column(tableColumn)
			.data()
			.reduce((a, b) => intVal(a) + intVal(b), 0);

		// Total over this page
		let pageTotal = api
			.column(tableColumn, { page: "current" })
			.data()
		.reduce((a, b) => intVal(a) + intVal(b), 0);

		// Update footer
    jQuery(api.column(2)
    	.footer())
      .html(
        toCurrency(pageTotal) + " (" + toCurrency(total) + " total)")
        .addClass(() => total < 0 ? 'text-danger' : total > 0 ? 'text-success' : null);
	}
}

export const initialiseLineChart = (elem, params = {}) => {
		// Chart
		const $this = jQuery(elem);
  const ctx = $this[0].getContext('2d');

  $this.attr('height', parseInt($this.attr('data-height'), 10));

  // Line Realtime
  if ($this.hasClass('rui-chartjs-line')) {
    const dataInterval = parseInt($this.attr('data-chartjs-interval'), 10);
    const dataBorderColor = $this.attr('data-chartjs-line-color');
    const conf = {};

    const gradient = ctx.createLinearGradient(0, 0, 0, 90);
    gradient.addColorStop(0, Chart.helpers.color(dataBorderColor)
      .alpha(0.1)
      .rgbString());
    gradient.addColorStop(1, Chart.helpers.color(dataBorderColor)
      .alpha(0)
      .rgbString());

    const rand = () => Array.from({
      length: 40
    }, () => Math.floor(Math.random() * (100 - 40) + 40));

    function addData(chart, data) {
      chart.data.datasets.forEach((dataset) => {
        let data = dataset.data;
        const first = data.shift();
        data.push(first);
        dataset.data = data;
      });

      chart.update();
      }

    conf.type = 'line';
    conf.data = {
      labels: params.data ? params.data.map(d => d.bank) : rand(),
      datasets: [{
        backgroundColor: gradient,
        borderColor: dataBorderColor,
        borderWidth: 2,
        pointHitRadius: 5,
        pointBorderWidth: 0,
        pointBackgroundColor: 'transparent',
        pointBorderColor: 'transparent',
        pointHoverBorderWidth: 0,
        pointHoverBackgroundColor: dataBorderColor,
        data: params.data ? params.data.map(d => d.amount) : rand(),
      }],
    };
    conf.options = {
      tooltips: {
        mode: 'index',
        intersect: false,
        backgroundColor: '#393f49',
        bodyFontSize: 11,
        bodyFontColor: '#d7d9e0',
        bodyFontFamily: '"Open Sans", sans-serif',
        xPadding: 10,
        yPadding: 10,
        displayColors: false,
        caretPadding: 5,
        cornerRadius: 4,
        callbacks: {
          title: () => {
            return;
          },
          label: (t) => {
            if ($this.hasClass('rui-chartjs-memory')) {
              return [`In use ${t.value}%`, `${t.value * 100} MB`];
            }
            if ($this.hasClass('rui-chartjs-disc')) {
              return [`Read ${Math.round((t.value / 80) * 100) / 100} MB/s`,
                `Write ${Math.round((t.value / 90) * 100) / 100} MB/s`];
            }
            if ($this.hasClass('rui-chartjs-cpu')) {
              return [`Utilization ${t.value}%`, `Processes ${parseInt((t.value / 10), 10)}`];
            }
            if ($this.hasClass('rui-chartjs-total')) {
              return `${t.label}: ${toCurrency(t.value)}`;
            }
          }
        },
      },
      legend: {
        display: false,
      },
      maintainAspectRatio: true,
      spanGaps: false,
      plugins: {
        filler: {
          propagate: false,
        },
      },
      scales: {
        xAxes: [{
          display: false
        }],
        yAxes: [{
          display: false,
          ticks: {
            beginAtZero: true,
          },
        }],
      },
    };
    const myChart = new Chart(ctx, conf);
    setInterval(() => addData(myChart), dataInterval);
  }
}

export const initialiseDonutChart = () => {
	// Doughnut
	jQuery('.rui-chartist')
		.each(function() {
				const $this = jQuery(this);
				let dataSeries = $this.attr('data-chartist-series');
				const dataWidth = $this.attr('data-width');
				const dataHeight = $this.attr('data-height');
				const dataGradient = $this.attr('data-chartist-gradient');
				const dataBorderWidth = parseInt($this.attr('data-chartist-width'), 10);
				const data = {};
				const conf = {};

    // Data
    if (dataSeries) {
    	dataSeries = dataSeries.split(',');
    	let dataSeriesNum = [];
    	for (let i = 0; i < dataSeries.length; i++) {
    		dataSeriesNum.push(parseInt(dataSeries[i], 10));
    	}
    	data.series = dataSeriesNum;
    }

    // Conf
    conf.donut = true;
    conf.showLabel = false;

    if (dataBorderWidth) {
    	conf.donutWidth = dataBorderWidth;
    }
    if (dataWidth) {
    	conf.width = dataWidth;
    }
    if (dataHeight) {
    	conf.height = dataHeight;
    }

    const chart = new Chartist.Pie($this[0], data, conf);

    // Create gradient
    chart.on('created', function(ctx) {
    const defs = ctx.svg.elem('defs');
    defs.elem('linearGradient', {
    		id: 'gradient',
    		x1: 0,
    		y1: 1,
    		x2: 0,
    		y2: 0
    	})
    	.elem('stop', {
    		offset: 0,
    		'stop-color': dataGradient.split(';')[0]
    	})
    	.parent()
    	.elem('stop', {
    		offset: 1,
    		'stop-color': dataGradient.split(';')[1]
    	});
    });
    });
}

/**
 * An action that can be applied to a table to make it into a data table
 * // usage <table class="rui-datatabl table table-striped" use:initialiseDatatable={{callBackColumn:4, responsive:true}}>
 *
 * @param { HTMLDOMElement } elem the element on which the action is used
 * @param { Object } params extra initialisation parameters passed to the action
 */
export const initialiseDatatable = (elem, params = {}) => {
	let table = jQuery(elem)
		.DataTable({
      destroy: true,
      stateSave: true,
      	stateDuration: 60 * 60 * 1,
			order: [[2, "desc"]],
			dom: "<lfB<t><ip>>",
			buttons: ["excel", "pdf"],
			responsive: params.responsive || false,
			footerCallback: displayTableSum(params.callBackColumn)
		});

	return {
		// destroy() {
		// 	table.destroy();
		// }
	};
}
export const initialiseBasicDataTable = (elem, params = {}) => {
	let { isMobile, isDesktop } = mediaHandler()
	let table = jQuery(elem)
		.DataTable({
			destroy: true,
			paging: false,
			responsive: params.responsive || false,
			lengthChange: false,
			ordering: false,
			scrollY: isDesktop ? 500 : 300,
			scrollCollapse: true,
			searching: false,
			stateSave: true,
			stateDuration: 60 * 60 * 1,
			info: false
		});

	return {
		// destroy() {
		// 	table.destroy();
		// }
	};
}
