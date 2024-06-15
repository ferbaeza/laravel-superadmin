import './styles/listCharts.scss';
import * as React from 'react';
import List from '@mui/material/List';
import ListItem from '@mui/material/ListItem';
import ListItemText from '@mui/material/ListItemText';
import ListItemAvatar from '@mui/material/ListItemAvatar';
import Avatar from '@mui/material/Avatar';
import './styles/listCharts.scss';


export default function TablasList({ tablasData = [] }) {

    const publicPath = process.env.PUBLIC_URL + '/icons/';

    return (
        <div className="lists">
            <List sx={{ width: '100%', maxWidth: 360, bgcolor: "whitesmoke" }}>
                {tablasData && tablasData.map((tabla) => (
                    <ListItem>
                        <ListItemAvatar>
                            <Avatar alt={tabla.id} src={publicPath + 'database-fill-add-dark.svg'}>
                            </Avatar>
                        </ListItemAvatar>
                        <ListItemText primary={tabla.nombre} secondary={tabla.size} />
                    </ListItem>
                ))}
            </List>
        </div>
    );
}

