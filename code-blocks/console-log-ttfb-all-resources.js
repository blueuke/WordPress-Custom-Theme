
// This script displays the TTFB and duration of all resources in the console starting with the most time consuming one.
// Great for debugging performance issues.
let entriesArray = [];

new PerformanceObserver((entryList) => {
  let entries = entryList.getEntries();

  for (const entry of entries) {
    if (entry.responseStart > 0) {
      entriesArray.push({name: entry.name, ttfb: entry.responseStart, duration: entry.duration});
    }
  }
}).observe({
  type: 'resource',
  buffered: true
});

window.addEventListener('load', () => {
  function bubbleSort(array) {
    let len = array.length;
    for (let i = 0; i < len; i++) {
      for (let j = 0; j < len - i - 1; j++) {
        if (array[j].duration < array[j + 1].duration) {
          let temp = array[j];
          array[j] = array[j + 1];
          array[j + 1] = temp;
        }
      }
    }
    return array;
  }

  entriesArray = bubbleSort(entriesArray);

  for (let i = 0; i < entriesArray.length; i++) {
    console.log(`${i+1}. TTFB: ${entriesArray[i].ttfb}, Duration: ${entriesArray[i].duration}, Name: ${entriesArray[i].name}`);
  }
});