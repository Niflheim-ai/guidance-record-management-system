
// Purpose Chart
// Get the number of rows in each table
const loaRowCount = document.querySelectorAll("#loa-table tbody tr").length;
const counsellingRowCount = document.querySelectorAll("#counselling-table tbody tr").length;
const aafRowCount = document.querySelectorAll("#aaf-table tbody tr").length;
const otherRowCount = document.querySelectorAll("#other-table tbody tr").length;

// Prepare data for the chart
const dValues = ["Leave of Absence", "Counselling / Consultation", "Absence Application Form", "Other"];
const eValues = [loaRowCount, counsellingRowCount, aafRowCount, otherRowCount];

// Chart configuration
const pieColors = ["#6a72f8", "#fc3503", "#00C897", "#a87a6c"];

new Chart("pieChart", {
    type: "pie",
    data: {
        labels: dValues,
        datasets: [{
            label: "Number of Records",
            backgroundColor: pieColors,
            data: eValues
        }]
    },
    options: {
        title: {
            display: true,
            text: "Number of Records in Each Table"
        }
    }
});


// Course Chart

function getCourseColumnData(tableId) {
    const rows = document.querySelectorAll(tableId + " tbody tr");
    const yearData = {
        "1st Year": 10,
        "2nd Year": 20,
        "3rd Year": 30,
        "4th Year": 40
    };

    rows.forEach(row => {
        const yearCell = row.querySelector("td[data-column='year']");
        if (yearCell) {
            const year = yearCell.textContent.trim();
            if (yearData.hasOwnProperty(year)) {
                yearData[year]++;
            }
        }
    });
    return Object.values(yearData);
}

// Get data for the "year" column in the "all-table"
const allTableDataBar = getCourseColumnData("#all-table");

// Chart configuration
const barColors = ["#6a72f8", "#fc3503", "#00C897", "#a87a6c"];
const barLabels = ["Visitor", "2nd Year", "3rd Year", "4th Year"];

new Chart("courseCount", {
    type: 'bar',
  data: {
    labels: ['Visitor', 'Information System', 'Civil Engineering',  'Nursing', 'Psychology',  'Midwifery'],
    datasets: [{
        label: 'Visitor',
        data: [12]
    },{
      label: 'Information System',
      data: [0,50]
    }, {
      label: 'Civil Engineering',
      data: [0,0,35]
    }, {
      label: 'Nursing',
      data: [0,0,0,25]
    }, {
      label: 'Psychology',
      data: [0,0,0,0,60]
    }, {
      label: 'Midwifery',
      data: [0,0,0,0,0,42]
      }]
  }
});

// "#ebc38f", "#508D69", "#0966ad", "#f09eff", "#c9c9c9", "#FF00FF"
// Year Level Chart
// Function to extract data from the "year" column in a specific table
function getYearColumnData(tableId) {
    const rows = document.querySelectorAll(tableId + " tbody tr");
    const yearData = {
        "Visitor": 5,
        "1st Year": 10,
        "2nd Year": 20,
        "3rd Year": 30,
        "4th Year": 40
    };

    rows.forEach(row => {
        const yearCell = row.querySelector("td[data-column='year']");
        if (yearCell) {
            const year = yearCell.textContent.trim();
            if (yearData.hasOwnProperty(year)) {
                yearData[year]++;
            }
        }
    });
    return Object.values(yearData);
}

// Get data for the "year" column in the "all-table"
const allTableData = getYearColumnData("#all-table");

// Chart configuration
const doughnutColors = ["#1de767", "#6a72f8", "#fc3503", "#00C897", "#a87a6c"];
const labels = ["Visitor", "1st Year", "2nd Year", "3rd Year", "4th Year"];

new Chart("yearLevelCount", {
    type: "doughnut",
    data: {
        labels: labels,
        datasets: [{
            label: "Number of Records",
            backgroundColor: doughnutColors,
            data: allTableData
        }]
    },
    options: {
        title: {
            display: true,
            text: "Number of Records in Each Year"
        }
    }
});
