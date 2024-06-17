import './drawer.scss';
import * as React from 'react';
import Box from '@mui/material/Box';
import { Button, FormControl, FormHelperText, InputLabel, MenuItem, NativeSelect, Select, TextField } from '@mui/material';

export default function NuevoUsuarioDrawer() {

    const [open, setOpen] = React.useState(false);

    const toggleDrawer = (newOpen) => () => {
        setOpen(newOpen);
        console.log('open', open);
    };


    const [age, setAge] = React.useState('');

    const handleChange = (event) => {
        setAge(event.target.value);
    };

    return (
        <div className="user-drawer">
            <Box sx={{ width: 650 }} role="presentation" onClick={toggleDrawer(false)}>
                <Box sx={{ display: 'flex', justifyContent: 'center', alignItems: 'center', height: '100%' }}>
                <div className="drawer-form">
                        <div className="form-title">
                            <h1>Formulario de Nuevo Usuario</h1>
                        </div>
                        <div className="form-body">
                            <FormControl fullWidth>
                                <FormControl fullWidth>
                                <TextField className='text-user-field' id="outlined-basic" label="Outlined" variant="outlined" />
                                <TextField id="outlined-basic" label="Outlined" variant="outlined" />
                                <TextField id="outlined-basic" label="Outlined" variant="outlined" />


                                {/* <InputLabel id="demo-simple-select-required-label">Age</InputLabel> */}
                                {/* <Select
                                    labelId="demo-simple-select-required-label"
                                    id="demo-simple-select-required"
                                    value={age}
                                    label="Age *"
                                    onChange={handleChange}
                                >
                                    <MenuItem value="">
                                        <em>None</em>
                                    </MenuItem>
                                    <MenuItem value={10}>Ten</MenuItem>
                                    <MenuItem value={20}>Twenty</MenuItem>
                                    <MenuItem value={30}>Thirty</MenuItem>
                                </Select>
                                <FormHelperText>Required</FormHelperText> */}

                            </FormControl>

                            <FormControl required sx={{ m: 1, minWidth: 120 }}>
                                <InputLabel id="demo-simple-select-required-label">Age</InputLabel>
                                <Select
                                    labelId="demo-simple-select-required-label"
                                    id="demo-simple-select-required"
                                    value={age}
                                    label="Age *"
                                    onChange={handleChange}
                                >
                                    <MenuItem value="">
                                        <em>None</em>
                                    </MenuItem>
                                    <MenuItem value={10}>Ten</MenuItem>
                                    <MenuItem value={20}>Twenty</MenuItem>
                                    <MenuItem value={30}>Thirty</MenuItem>
                                </Select>
                                <FormHelperText>Required</FormHelperText>
                            </FormControl>
                            <FormControl required sx={{ m: 1, minWidth: 120 }}>
                                    <Button onClick={toggleDrawer(true)} variant="contained">Nuevo Usuario</Button>
                            </FormControl>
                            </FormControl>
                        </div>
                </div>

                    </Box>

            </Box>

        </div>
    );
}

