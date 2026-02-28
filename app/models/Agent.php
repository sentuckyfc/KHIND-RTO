<?php
/**
 * KHIND RTO - Agent Model
 */
class Agent {
    /**
     * Return the current agent based on ?agent= URL parameter,
     * falling back to defaults if no match.
     */
    public static function getCurrent() {
        $agent_code = isset($_GET['agent']) ? htmlspecialchars($_GET['agent']) : '';

        // Agent registry (can be replaced with a database query)
        $agents = [
            'test' => [
                'name' => 'Test',
                'phone' => '601120992441',
                'whatsapp' => '601120992441',
                'title' => 'Authorized Sales Agent',
                'image' => '',
            ],
        ];

        if (!empty($agent_code) && isset($agents[$agent_code])) {
            return $agents[$agent_code];
        }

        return [
            'name' => DEFAULT_AGENT_NAME,
            'phone' => DEFAULT_AGENT_PHONE,
            'whatsapp' => DEFAULT_AGENT_WHATSAPP,
            'title' => 'Authorized Sales Agent',
            'image' => '',
        ];
    }
}
