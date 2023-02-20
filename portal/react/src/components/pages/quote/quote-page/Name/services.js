import { apiClient } from "../../../../../common/apiClients";
import { handleResponse, handleError } from "../../../../../common/GenericResponseHandler";
import { API_CONSTANTS } from "../../../../../common/api";

function submitName(payload) {
    return apiClient()
        .post(API_CONSTANTS.LEAD, payload)
        .then(handleResponse)
        .catch(handleError);
}

export const nameService = {
    submitName,
}