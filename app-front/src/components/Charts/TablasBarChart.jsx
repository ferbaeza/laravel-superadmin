import * as React from 'react';
import './styles/barCharts.scss';
import {
    BarChart,
    Bar,
    ResponsiveContainer,
    Tooltip,
    Rectangle
} from 'recharts';

import { capitalizar } from '../../shared/utils/StringsUtils.js';



export default function TablasBarChart({ tablasData = [] }) {

    return (
        <div className="tablasbar">
            <ResponsiveContainer width="100%" height="100%">
                <BarChart width={150} height={40} data={tablasData}>
                    <Bar dataKey="size" fill='#384256' displayName='nombre' activeBar={<Rectangle fill="pink" stroke="blue" />} />
                    <Tooltip
                        formatter={(value, name, props) => [value + '_Mb', capitalizar(`${props.payload.nombre}`)]} 
                    />

                </BarChart>
            </ResponsiveContainer>

        </div>
    );
}
