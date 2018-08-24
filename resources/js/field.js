Nova.booting((Vue, router) => {
    Vue.component('index-charcounted-text', require('./components/CharcountedText/IndexField'));
    Vue.component('detail-charcounted-text', require('./components/CharcountedText/DetailField'));
    Vue.component('form-charcounted-text', require('./components/CharcountedText/FormField'));

    Vue.component('index-charcounted-textarea', require('./components/CharcountedTextArea/IndexField'));
    Vue.component('detail-charcounted-textarea', require('./components/CharcountedTextArea/DetailField'));
    Vue.component('form-charcounted-textarea', require('./components/CharcountedTextArea/FormField'));
})
