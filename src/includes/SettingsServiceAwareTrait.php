<?php

namespace DeepWebSolutions\Framework\Settings;

\defined( 'ABSPATH' ) || exit;

/**
 * Basic implementation of the settings-service-aware interface.
 *
 * @since   1.0.0
 * @version 1.0.0
 * @author  Antonius Hegyes <a.hegyes@deep-web-solutions.com>
 * @package DeepWebSolutions\WP-Framework\Settings
 */
trait SettingsServiceAwareTrait {
	// region FIELDS AND CONSTANTS

	/**
	 * Setting service for working with options pages and custom fields.
	 *
	 * @since   1.0.0
	 * @version 1.0.0
	 *
	 * @access  protected
	 * @var     SettingsService
	 */
	protected SettingsService $settings_service;

	// endregion

	// region GETTERS

	/**
	 * Gets the current settings service instance set on the object.
	 *
	 * @since   1.0.0
	 * @version 1.0.0
	 *
	 * @return  SettingsService
	 */
	public function get_settings_service(): SettingsService {
		return $this->settings_service;
	}

	// endregion

	// region SETTERS

	/**
	 * Sets a settings service instance on the object.
	 *
	 * @since   1.0.0
	 * @version 1.0.0
	 *
	 * @param   SettingsService     $service        Settings service instance to use from now on.
	 */
	public function set_settings_service( SettingsService $service ) {
		$this->settings_service = $service;
	}

	// endregion

	// region METHODS

	/**
	 * Wrapper around the service's own method.
	 *
	 * @since   1.0.0
	 * @version 1.0.0
	 *
	 * @param   string  $field_id       The ID of the field within the settings to read from the database.
	 * @param   string  $settings_id    The ID of the settings group to read from the database.
	 * @param   array   $params         Other parameters required for the adapter to work.
	 * @param   string  $handler_id     The ID of the settings framework handler to use.
	 *
	 * @return  mixed
	 */
	public function get_option( string $field_id, string $settings_id, array $params = array(), string $handler_id = 'default' ) {
		return $this->get_settings_service()->get_option( $field_id, $settings_id, $params, $handler_id );
	}

	/**
	 * Wrapper around the service's own method.
	 *
	 * @since   1.0.0
	 * @version 1.0.0
	 *
	 * @param   string  $field_id       The ID of the field to read from the database.
	 * @param   mixed   $object_id      The ID of the object the data is for.
	 * @param   array   $params         Other parameters required for the adapter to work.
	 * @param   string  $handler_id     The ID of the settings framework handler to use.
	 *
	 * @return  mixed
	 */
	public function get_field( string $field_id, $object_id, array $params = array(), string $handler_id = 'default' ) {
		return $this->get_settings_service()->get_field( $field_id, $object_id, $params, $handler_id );
	}

	/**
	 * Wrapper around the service's own method.
	 *
	 * @since   1.0.0
	 * @version 1.0.0
	 *
	 * @param   string  $field_id       The ID of the field within the settings to update.
	 * @param   mixed   $value          The new value of the setting.
	 * @param   string  $settings_id    The ID of the settings group to update.
	 * @param   array   $params         Other parameters required for the adapter to work.
	 * @param   string  $handler_id     The ID of the settings framework handler to use.
	 *
	 * @return  mixed
	 */
	public function update_option( string $field_id, $value, string $settings_id, array $params = array(), string $handler_id = 'default' ) {
		return $this->get_settings_service()->update_option( $field_id, $value, $settings_id, $params, $handler_id );
	}

	/**
	 * Wrapper around the service's own method.
	 *
	 * @since   1.0.0
	 * @version 1.0.0
	 *
	 * @param   string  $field_id       The ID of the field to update.
	 * @param   mixed   $value          The new value of the setting.
	 * @param   mixed   $object_id      The ID of the object the update is for.
	 * @param   array   $params         Other parameters required for the adapter to work.
	 * @param   string  $handler_id     The ID of the settings framework handler to use.
	 *
	 * @return  mixed
	 */
	public function update_field( string $field_id, $value, $object_id, array $params = array(), string $handler_id = 'default' ) {
		return $this->get_settings_service()->update_field( $field_id, $value, $object_id, $params, $handler_id );
	}

	// endregion
}
