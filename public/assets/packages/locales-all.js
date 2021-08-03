/*!
@fullcalendar/core v4.0.1
Docs & License: https://fullcalendar.io/
(c) 2019 Adam Shaw
*/
(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory() :
    typeof define === 'function' && define.amd ? define(factory) :
    (global = global || self, global.FullCalendarLocalesAll['pt-br'] = factory());
}(this, function () { 'use strict';

    

    var _m48 = {
        code: "pt-br",
        buttonText: {
            prevText: "Anterior",
            nextText: "Próximo",
            currentText: "Hoje",
            month: "Mês",
            week: "Semana",
            day: "Dia",
            list: "Compromissos"
        },
        weekLabel: "Sm",
        allDayText: "dia inteiro",
        eventLimitText: function (n) {
            return "mais +" + n;
        },
        noEventsMessage: "Não há eventos para mostrar"
    };

    

    var _arrayEntry = [
     _m48
    ];

    return _arrayEntry;

}));
