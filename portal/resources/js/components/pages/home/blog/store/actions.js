/* ============
 * Actions for the article module
 * ============
 *
 * The actions that are available on the
 * article module.
 */

import {
    BLOG_LIST,
    BLOG_ADD,
    BLOG_UPDATE,
    BLOG_REMOVE,
} from './action-types';

export function add(payload) {
    return {
        type: BLOG_ADD,
        payload
    }
}

export function update(payload) {
    return {
        type: BLOG_UPDATE,
        payload
    }
}

export function remove(payload) {
    return {
        type: BLOG_REMOVE,
        payload
    }
}

export function list(payload) {
    return {
        type: BLOG_LIST,
        payload
    }
}