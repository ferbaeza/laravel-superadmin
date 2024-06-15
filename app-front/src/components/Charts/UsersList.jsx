import * as React from 'react';
import List from '@mui/material/List';
import ListItem from '@mui/material/ListItem';
import ListItemText from '@mui/material/ListItemText';
import ListItemAvatar from '@mui/material/ListItemAvatar';
import Avatar from '@mui/material/Avatar';
import './styles/listCharts.scss';


export default function UserList({ usersData = [] }) {
    return (
        <List sx={{ width: '100%', maxWidth: 360, bgcolor: "whitesmoke" }}>
            {usersData && usersData.map((user) => (
            <ListItem>
                <ListItemAvatar>
                        <Avatar sx={{ bgcolor: '#384256'}}>
                        {user.name[0]}
                    </Avatar>
                </ListItemAvatar>
                <ListItemText primary={user.name ?? 'User--Name'} secondary={user.email} />
            </ListItem>
            ))}
        </List>
    );
}


