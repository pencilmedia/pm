function AgileListenerProxy(agileEvent, attachTo, handler) {
	var listenerObj = [];
	var keyData = {};
	var event = null;
	
	switch (agileEvent) {
		case AgileEventConstants.EVENT_SELECT_ALL:
			keyData['keys'] = AgileKeyConstants.KEY_CODE_CHAR_A;
			keyData['ctrl'] = true;
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;
			
		case AgileEventConstants.EVENT_TAB_FORWARD:
			keyData['keys'] = AgileKeyConstants.KEY_CODE_TAB;
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;
			
		case AgileEventConstants.EVENT_TAB_BACKWARD:
			keyData['shift'] = true;
			if (window.BROWSER.isSafari) {
				keyData['keys'] = AgileKeyConstantsSafari.KEY_CODE_SHIFT_TAB;
			} else {
				keyData['keys'] = AgileKeyConstants.KEY_CODE_TAB;
			}
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;
			
		case AgileEventConstants.EVENT_MOVE_UP:
			if (window.BROWSER.isSafari) {
				keyData['keys'] = AgileKeyConstantsSafari.KEY_CODE_ARROW_UP;
			} else {
				keyData['keys'] = AgileKeyConstants.KEY_CODE_ARROW_UP;
			}
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;
			
		case AgileEventConstants.EVENT_RANGE_SELECT_UP:
			keyData['shift'] = true;
			if (window.BROWSER.isSafari) {
				keyData['keys'] = AgileKeyConstantsSafari.KEY_CODE_ARROW_UP;
			} else {
				keyData['keys'] = AgileKeyConstants.KEY_CODE_ARROW_UP;
			}
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;
			
		case AgileEventConstants.EVENT_MOVE_DOWN:
			if (window.BROWSER.isSafari) {
				keyData['keys'] = AgileKeyConstantsSafari.KEY_CODE_ARROW_DOWN;
			} else {
				keyData['keys'] = AgileKeyConstants.KEY_CODE_ARROW_DOWN;
			}
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;
			
		case AgileEventConstants.EVENT_RANGE_SELECT_DOWN:
			keyData['shift'] = true;
			if (window.BROWSER.isSafari) {
				keyData['keys'] = AgileKeyConstantsSafari.KEY_CODE_ARROW_DOWN;
			} else {
				keyData['keys'] = AgileKeyConstants.KEY_CODE_ARROW_DOWN;
			}
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;
			
		case AgileEventConstants.EVENT_MOVE_LEFT:
			if (window.BROWSER.isSafari) {
				keyData['keys'] = AgileKeyConstantsSafari.KEY_CODE_ARROW_LEFT;
			} else {
				keyData['keys'] = AgileKeyConstants.KEY_CODE_ARROW_LEFT;
			}
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;
			
		case AgileEventConstants.EVENT_RANGE_SELECT_LEFT:
			keyData['shift'] = true;
			if (window.BROWSER.isSafari) {
				keyData['keys'] = AgileKeyConstantsSafari.KEY_CODE_ARROW_LEFT;
			} else {
				keyData['keys'] = AgileKeyConstants.KEY_CODE_ARROW_LEFT;
			}
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;
			
		case AgileEventConstants.EVENT_MOVE_RIGHT:
			if (window.BROWSER.isSafari) {
				keyData['keys'] = AgileKeyConstantsSafari.KEY_CODE_ARROW_RIGHT;
			} else {
				keyData['keys'] = AgileKeyConstants.KEY_CODE_ARROW_RIGHT;
			}
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;
			
		case AgileEventConstants.EVENT_RANGE_SELECT_RIGHT:
			keyData['shift'] = true;
			if (window.BROWSER.isSafari) {
				keyData['keys'] = AgileKeyConstantsSafari.KEY_CODE_ARROW_RIGHT;
			} else {
				keyData['keys'] = AgileKeyConstants.KEY_CODE_ARROW_RIGHT;
			}
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;

		case AgileEventConstants.EVENT_MOVE_TOP:
			event = AgileBrowserEventConstants.KEY_DOWN;
			
			// Listener #1
			var dict1 = {'keys': AgileKeyConstants.KEY_CODE_HOME};

			// Listener #2
			if (window.BROWSER.isSafari) {
				var dict2 = {'keys': AgileKeyConstantsSafari.KEY_CODE_ARROW_UP, 'ctrl': true};
			} else {
				var dict2 = {'keys': AgileKeyConstants.KEY_CODE_ARROW_UP, 'ctrl': true};
			}

			keyData = null;
			keyDict = [dict1, dict2];			
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event, keyDict);

			break;
			
		case AgileEventConstants.EVENT_MOVE_BOTTOM:
			event = AgileBrowserEventConstants.KEY_DOWN;
			
			// Listener #1
			var dict1 = {'keys': AgileKeyConstants.KEY_CODE_END};

			// Listener #2
			if (window.BROWSER.isSafari) {
				var dict2 = {'keys': AgileKeyConstantsSafari.KEY_CODE_ARROW_DOWN, 'ctrl': true};
			} else {
				var dict2 = {'keys': AgileKeyConstants.KEY_CODE_ARROW_DOWN, 'ctrl': true};
			}

			keyData = null;
			keyDict = [dict1, dict2];			
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event, keyDict);
			
			break;
			
		case AgileEventConstants.EVENT_RANGE_SELECT_TOP:
			event = AgileBrowserEventConstants.KEY_DOWN;

			// Listener #1
			var dict1 = {'keys': AgileKeyConstants.KEY_CODE_HOME, 'shift': true};

			// Listener #2
			if (window.BROWSER.isSafari) {
				var dict2 = {'keys': AgileKeyConstantsSafari.KEY_CODE_ARROW_UP, 'ctrl': true, 'shift': true};
			} else {
				var dict2 = {'keys': AgileKeyConstants.KEY_CODE_ARROW_UP, 'ctrl': true, 'shift': true};
			}

			keyData = null;
			keyDict = [dict1, dict2];			
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event, keyDict);
			
			break;
			
		case AgileEventConstants.EVENT_RANGE_SELECT_BOTTOM:
			event = AgileBrowserEventConstants.KEY_DOWN;

			// Listener #1
			var dict1 = {'keys': AgileKeyConstants.KEY_CODE_END, 'shift': true};

			// Listener #2
			if (window.BROWSER.isSafari) {
				var dict2 = {'keys': AgileKeyConstantsSafari.KEY_CODE_ARROW_DOWN, 'ctrl': true, 'shift': true};
			} else {
				var dict2 = {'keys': AgileKeyConstants.KEY_CODE_ARROW_DOWN, 'ctrl': true, 'shift': true};
			}

			keyData = null;
			keyDict = [dict1, dict2];			
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event, keyDict);
			
			break;
			
		case AgileEventConstants.EVENT_RANGE_SELECT_MOUSE:
			keyData['shift'] = true;
			event = AgileBrowserEventConstants.MOUSE_CLICK;
			
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;
			
		case AgileEventConstants.EVENT_ADDITIVE_SELECT_MOUSE:
			if (window.BROWSER.isFirefox && window.BROWSER.isMac) {
				event = AgileBrowserEventConstants.CONTEXT_MENU;
			} else {
				keyData['ctrl'] = true;
				event = AgileBrowserEventConstants.MOUSE_CLICK;
			}
			
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;
			
		case AgileEventConstants.EVENT_EXPAND_ALL:
			keyData['keys'] = AgileKeyConstants.KEY_CODE_PLUS;
			keyData['shift'] = true;
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;

		case AgileEventConstants.EVENT_COLLAPSE_ALL:
			keyData['keys'] = AgileKeyConstants.KEY_CODE_MINUS;
			keyData['shift'] = true;
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;
			
		case AgileEventConstants.EVENT_LAUNCH_PALETTE:
			keyData['keys'] = AgileKeyConstants.KEY_CODE_CHAR_L;
			keyData['ctrl'] = true;
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;
			
		case AgileEventConstants.EVENT_COPY:
			keyData['keys'] = AgileKeyConstants.KEY_CODE_CHAR_C;
			keyData['ctrl'] = true;
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;
			
		case AgileEventConstants.EVENT_PASTE:
			keyData['keys'] = AgileKeyConstants.KEY_CODE_CHAR_V;
			keyData['ctrl'] = true;
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;
			
		case AgileEventConstants.EVENT_PRINT:
			keyData['keys'] = AgileKeyConstants.KEY_CODE_CHAR_P;
			keyData['ctrl'] = true;
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;
			
		case AgileEventConstants.EVENT_ESCAPE:
			keyData['keys'] = AgileKeyConstants.KEY_CODE_ESCAPE;
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;
			
		case AgileEventConstants.EVENT_ENTER:
			keyData['keys'] = AgileKeyConstants.KEY_CODE_ENTER;
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;
			
		case AgileEventConstants.EVENT_DELETE:
			keyData['keys'] = [AgileKeyConstants.KEY_CODE_DELETE, AgileKeyConstants.KEY_CODE_BACKSPACE];
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;
			
		case AgileEventConstants.EVENT_PAGE_UP:
			keyData['keys'] = AgileKeyConstants.KEY_CODE_PAGE_UP;
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;
			
		case AgileEventConstants.EVENT_PAGE_DOWN:
			keyData['keys'] = AgileKeyConstants.KEY_CODE_PAGE_DOWN;
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;
			
			
		case AgileEventConstants.EVENT_GLOBAL_HOME:
			keyData['keys'] = AgileKeyConstants.KEY_CODE_CHAR_H;
			keyData['ctrl'] = true;
			keyData['shift'] = true;
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;
			
		case AgileEventConstants.EVENT_GLOBAL_NEW:
			keyData['keys'] = AgileKeyConstants.KEY_CODE_CHAR_C;
			keyData['ctrl'] = true;
			keyData['shift'] = true;
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;
			
		case AgileEventConstants.EVENT_GLOBAL_SEARCH:
			keyData['keys'] = AgileKeyConstants.KEY_CODE_CHAR_S;
			keyData['ctrl'] = true;
			keyData['shift'] = true;
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;
			
		case AgileEventConstants.EVENT_GLOBAL_PARAMETRIC:
			keyData['keys'] = AgileKeyConstants.KEY_CODE_CHAR_Q;
			keyData['ctrl'] = true;
			keyData['shift'] = true;
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;
			
		case AgileEventConstants.EVENT_GLOBAL_WINDOWING:
			keyData['keys'] = AgileKeyConstants.KEY_CODE_CHAR_N;
			keyData['ctrl'] = true;
			keyData['shift'] = true;
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;
			
		case AgileEventConstants.EVENT_GLOBAL_LOGOUT:
			keyData['keys'] = AgileKeyConstants.KEY_CODE_CHAR_E;
			keyData['ctrl'] = true;
			keyData['shift'] = true;
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;
			
		case AgileEventConstants.EVENT_GLOBAL_HELP:
			keyData['keys'] = [AgileKeyConstants.KEY_CODE_SLASH, AgileKeyConstants.KEY_CODE_QUESTION_MARK];
			keyData['ctrl'] = true;
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;
	
		case AgileEventConstants.EVENT_SAVE:
			keyData['keys'] = AgileKeyConstants.KEY_CODE_CHAR_S;
			keyData['ctrl'] = true;
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;

		case AgileEventConstants.EVENT_CANCEL:
			keyData['keys'] = AgileKeyConstants.KEY_CODE_CHAR_K;
			keyData['ctrl'] = true;
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;

		case AgileEventConstants.EVENT_INSERT:
			keyData['keys'] = AgileKeyConstants.KEY_CODE_CHAR_I;
			keyData['ctrl'] = true;
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;

		case AgileEventConstants.EVENT_NEW_WINDOW:
			if (window.BROWSER.isFirefox && window.BROWSER.isMac) {
				keyData['shift'] = true;
				event = AgileBrowserEventConstants.CONTEXT_MENU;
			} else {
				keyData['ctrl'] = true;
				keyData['shift'] = true;
				event = AgileBrowserEventConstants.MOUSE_CLICK;
			}
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;

		case AgileEventConstants.EVENT_EXCEL:
			keyData['keys'] = AgileKeyConstants.KEY_CODE_CHAR_E;
			keyData['ctrl'] = true;
			event = AgileBrowserEventConstants.KEY_DOWN;
			listenerObj[0] = new AgileEventProxy(attachTo, keyData, handler, event);
			break;
	
	
	
			
	}
	
	return listenerObj;
}