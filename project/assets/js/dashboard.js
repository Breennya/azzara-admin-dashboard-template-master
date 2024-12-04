/* globals Chart:false, feather:false */

function generateRandomData(numPoints, min, max) {
  return Array.from({ length: numPoints }, () => Math.floor(Math.random() * (max - min + 1)) + min);
}

function generateTimeLabels(numPoints, startHour = 15) {
  return Array.from({ length: numPoints }, (_, i) => {
      const date = new Date();
      date.setHours(startHour + 0, 0, i*10);
      return date.toTimeString().slice(0, 8); // Formato HH:MM:SS
  });
}

const chartConfig = (ctx, label, color, data, timeLabels) => ({
  type: 'line',
  data: {
    labels:timeLabels,
    datasets: [{
      label: label,
      data: data,
      borderColor: color,
      borderWidth: 2,
      fill: false,
      tension: 0
    }]
  },
  options: {
    scales: {
      x: { title: {display: true, text: 'Tiempo'}},
      y: { title: {display: true, text: label}}
    }
  }
})

const timeLabels = generateTimeLabels(24);

// Temperatura Interna
const innerTempCtx = document.getElementById('inner-temperature').getContext('2d');
new Chart(innerTempCtx, chartConfig(innerTempCtx, 'Temperatura Interna (°C)', 'rgba(255, 99, 132, 1)', generateRandomData(24, 18, 30), timeLabels));

// Humedad Interna
const innerHumidityCtx = document.getElementById('inner-humidity').getContext('2d');
new Chart(innerHumidityCtx, chartConfig(innerHumidityCtx, 'Humedad Interna (%)', 'rgba(54, 162, 235, 1)', generateRandomData(24, 40, 60),timeLabels));

// Temperatura Externa
const externalTempCtx = document.getElementById('external-temperature').getContext('2d');
new Chart(externalTempCtx, chartConfig(externalTempCtx, 'Temperatura Externa (°C)', 'rgba(255, 206, 86, 1)', generateRandomData(24, 10, 25),timeLabels));

// Humedad Externa
const externalHumidityCtx = document.getElementById('external-humidity').getContext('2d');
new Chart(externalHumidityCtx, chartConfig(externalHumidityCtx, 'Humedad Externa (%)', 'rgba(75, 192, 192, 1)', generateRandomData(24, 30, 70),timeLabels));

// Concentración de Gas
const gasConcentrationCtx = document.getElementById('gas-concentration').getContext('2d');
new Chart(gasConcentrationCtx, chartConfig(gasConcentrationCtx, 'Concentración de Gas (ppm)', 'rgba(153, 102, 255, 1)', generateRandomData(24, 200, 500),timeLabels));

// Presión Interna
const pressureCtx = document.getElementById('pressure').getContext('2d');
new Chart(pressureCtx, chartConfig(pressureCtx, 'Presión Interna (Pa)', 'rgba(255, 159, 64, 1)', generateRandomData(24, 900, 1100),timeLabels));
