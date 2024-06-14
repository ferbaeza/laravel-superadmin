import React from 'react';
import './styles/countCharts.scss';


function TablasCountChart({ totalTablasData = 0 }) {

    return (
        <div className="chart">
            <div className="chart-main">
                <div className="chart-title">
                    <span>Total</span>
                    <span>Tablas</span>
                </div>
                <div className="chart-count">
                    <h2>{totalTablasData}</h2>
                </div>
            </div>
        </div>
    );
}
export default TablasCountChart;

