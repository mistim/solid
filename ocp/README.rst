Open/close principle (OCP)
==========================

Принцип открытости/закрытости
-----------------------------

Формулировка:
~~~~~~~~~~~~~

Программные сущности (классы, модули, функции и т.д.) должны быть открыты для расширения, но закрыты для изменения.

- **Открыт для расширений** - поведение может быть расширено путем добавления новых объектов, реализующих новые аспекты поведения
- **Закрыд для модификации** - в результате расширения поведения код объекта не может быть изменен

Почему?
~~~~~~~

Потому что это позволяет быстро и безболезненно реагировать  на изменения бизнес-логики.

Примеры:
~~~~~~~~

Плохо:
""""""

bad/Logger.php

.. literalinclude:: bad/Logger.php
    :language: php
    :linenos:

    bad/DbLogger.php

.. literalinclude:: bad/DbLogger.php
    :language: php
    :linenos:

    bad/SmtpMail.php

.. literalinclude:: bad/SmtpMail.php
    :language: php
    :linenos:

Хорошо:
"""""""

    ok/Logger.php

.. literalinclude:: ok/Logger.php
    :language: php
    :linenos:

    ok/DbLogger.php

.. literalinclude:: ok/DbLogger.php
    :language: php
    :linenos:

    ok/SmtpMail.php

.. literalinclude:: ok/SmtpMail.php
    :language: php
    :linenos:
