import * as React from 'react';
import './styles/barCharts.scss';
import {
    BarChart,
    Bar,
    ResponsiveContainer,
    Tooltip
} from 'recharts';



export default function TablasBarChart({ tablasData = [] }) {

    return (
        <div className="tablasbar">
            <ResponsiveContainer width="100%" height="100%">
                <BarChart width={150} height={40} data={tablasData}>
                    <Bar dataKey="size" fill="#8884d8" displayName='nombre'/>
                    <Tooltip formatter={(value, name, props) => [value + '_Mb', `Tabla: ${props.payload.nombre}`]} />

                </BarChart>
            </ResponsiveContainer>

        </div>
    );
}
