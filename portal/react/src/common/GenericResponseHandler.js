export function handleResponse(response) {
    if (response.data.responseCode === 200 || response.status === 200) {
        return response.data;
    } else {
        handleError(response)
    }
}

export function handleError(error) {
    if (error.response && error.response.data.status === 401) {
        localStorage.clear();
        window.location.replace('/');
    }
    throw (error);
}
